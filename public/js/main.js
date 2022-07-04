async function start() {
    let response = await fetch(' https://v2.jokeapi.dev/categories')
    let data = await response.json()
    console.log(data.categories)
    createCategory(data.categories)
}

start()

function createCategory(list){

    document.getElementById('category').innerHTML = `
    <select onchange="getJoke(this.value)">
        <option value="">Select a category</option>
        ${Object.values(list).map(function (category){
            return `<option>${category}</option>`
    }).join('')}
    </select>
    `
}

async function getJoke(value){
    if (value != null){
        let response = await fetch(`https://v2.jokeapi.dev/joke/${value}`)
        let data = await response.json()
        // console.log(data)
        displayJoke(data)
    }

}

function displayJoke(joke){
    let jokefield = document.getElementById('joke')
    let setupfield = document.getElementById('setup')
    let deliveryfield = document.getElementById('delivery')
    if(joke.type == 'single'){
        jokefield.innerHTML = `${joke.joke}`
    }
    else if(joke.type == 'twopart'){
        setupfield.innerHTML = `Q: ${joke.setup}`
        deliveryfield.innerHTML = `A: ${joke.delivery}`
    }
}

