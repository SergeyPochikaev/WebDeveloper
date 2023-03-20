get()

setInterval(get, 2000) // организует интервал вызова get раз за 2 сек

function cl() {
  console.clear()
}

function send() {
  var messages = document.getElementById('text').value

    (async () => {
      var response = await fetch('chat.php', {
        method: 'post',
        headers:{
          'Content-Type':'application/x-www-form-urlencoded'
        },
        body: 'message=${message}'
      })
      var answer = await response.json()
      //проверка
      if (answer.status === "ok") document.getElementById('text').value = ""
      if (answer.status === "error") document.getElementById('text').value = answer.console.error;
    }
    )()
  document.getElementById('text').value = ""
}

function get() {
  (async () => {
    var response = await fetch('chat.txt')
    var answer = await response.json()
    let str = ''
    for (i in answer.messages) {
      str = str + <div class='message'>${answer.messages[i]}</div>
    }
    document.getElementById('messages').innerHTML = str
  }
  )()
}