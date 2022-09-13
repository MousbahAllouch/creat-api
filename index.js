


function getData(){
    let userName=document.getElementById("name");
    let urlCHeckName= "http://localhost/test/api1.php?str="+userName;

    fetch(urlCHeckName)
    .then(response => response.json())
    .then(data => console.log(data));

    
}
