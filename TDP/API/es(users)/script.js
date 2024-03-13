async function fetchData() {
    const response = await fetch("./users.php")
    const users = await response.json()
    console.log(users)
    document.querySelector("body").innerHTML = JSON.stringify(users.payload)
}

fetchData();