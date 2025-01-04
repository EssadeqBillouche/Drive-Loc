fetch("data.php")
    .then(data => data.json())
    .then(Getdata =>{
        console.log(Getdata)
    }).catch(error =>{
        console.log("error is ", error)
})