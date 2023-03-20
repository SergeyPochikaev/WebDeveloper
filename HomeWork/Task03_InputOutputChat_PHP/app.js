get()

setInterval(get, 2000) // организует интервал вызова get раз за 2 сек

function cl() {
  console.clear()
}

function send()
{
  var messages = document.getElementById('text').value
    (async () => {
      var response = await fetch('chat.php?message' + message)
      var answer = await response.text()
    }
    )()
  document.getElementById('text').value = ""
}

function get() {
  (async () => {
    var response = await fetch('chat.txt')
    var answer = await response.text()
    document.getElementById('messages').innerText = answer
  })()
}