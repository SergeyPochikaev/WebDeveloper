//  <!-- <input id="name" type="text" placeholder="Как вас зовут?" value="">
// <input id="age" type="text" placeholder="Ваш возраст?" value="">
// <button onclick="go()">Ввод</button><span id="out">Привет</span> -->

get()

setInterval(get, 2000) // организует интервал вызова get раз за 2 сек

function cl() {
  console.clear()
}

function send() {
  var name = document.getElementById('text').value
  var str = `Привет ${name}!`
  document.getElementById('messages').innerHTML = str
  document.getElementById('text').value = ""
  console.log(str)
}

function get() {
  (async () => {
    var response = await fetch('chat.txt')
    var answer = await response.text()
    document.getElementById('messages').innerText = answer
  })()
}