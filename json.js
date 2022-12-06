var structure = {
id: 0,
pos: [10,0,10],
active: true,
}

json = JSON.stringify(structure)
console.log(json)

parsed = JSON.parse(json)
console.log(parsed)
