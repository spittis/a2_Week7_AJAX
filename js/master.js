(() => {

    function getData() {
        let targetURL = "./includes/connect.php?modelNo=R58";
        
        fetch(targetURL) //go get the data and bring it back!
        .then(res => res.json()) //turn the result into a plain javascript object
        .then(data =>  {
            console.log(data); //let's see what we got
            //run a fucntion to parse our data
            showCarData(data[0]); //run a function to put the data on the page //we need to use an aray syntax here because we are passing data, which is an array
        }) //let's see what we got
        .catch(function(error) {
            console.log(error); //if anything broke, log it to the console
        });
    }

function showCarData(data) {
    //debugger;
    //parse the DB info and put it where it needs to go
    const { modelName, pricing, modelDetails } = data; //destructuring assignment => MDN JS destructuring //these are the ids/classes
    //grab the elements we need, and populate them with data // a const is a variable name, you can change it
    document.querySelector('.modelName').textContent = modelName;
    document.querySelector('.priceInfo').textContent = `$ ${pricing}.00`;
    document.querySelector('.modelDetails').textContent = modelDetails; //you should have 3 of these that look the same, except you need the selector
}


    //you have to call it at the bottom
getData(); //trigger the getData function

//php gets the data, gives it back to us, then we have to convert it into a json value
//then we have to parse it.. this is the last step
})();