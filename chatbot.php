<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Chatbot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .chat-container {
            position: absolute;
            width: 300px;
            margin: 20px auto;
            background-color: #93ACC2;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            
        }

        .chat-header {
            background-color: #93ACC2;
            color: #00263D;
            /* padding: 5px 10px; */
            text-align: center;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chat-header svg {
            margin-right: -75px;
            margin-left: 25px;
            cursor: pointer;
            /* Toegevoegd om een cursor te tonen wanneer je erop klikt */
        }

        .chat-messages {
            padding: 0 10px;
            overflow-y: auto;
            max-height: 200px;
            /* Aangepaste hoogte voor de berichten */
        }

        .message {
            margin-bottom: 10px;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            max-width: 80%;
        }

        .user-message {
            background-color: #f6f6f6;
            float: right;
        }

        .bot-message {
            background-color: #fff;
            float: left;
        }

        .chat-input-container {
            display: flex;
            border-top: 1px solid #ddd;
        }

        .chat-input {
            flex: 1;
            padding: 10px;
            border: none;
            outline: none;
        }

        .send-icon {
            padding: 10px;
            background-color: #93ACC2;
            color: #00263D;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="chat-container">
        <div class="chat-header">
            <h3>Chatbot Jill 👋</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 36 36" onclick="resetChat()">
                <path fill="currentColor" stroke="currentColor" stroke-width="1" d="m19.41 18l8.29-8.29a1 1 0 0 0-1.41-1.41L18 16.59l-8.29-8.3a1 1 0 0 0-1.42 1.42l8.3 8.29l-8.3 8.29A1 1 0 1 0 9.7 27.7l8.3-8.29l8.29 8.29a1 1 0 0 0 1.41-1.41Z" class="clr-i-outline clr-i-outline-path-1" />
                <path fill="none" stroke="none" d="M0 0h36v36H0z" />
            </svg>

        </div>
        <div class="chat-messages" id="chat-messages"></div>
        <div class="chat-input-container">
            <input type="text" class="chat-input" id="user-input" placeholder="Waarmee kan ik je helpen?">
            <div class="send-icon" onclick="receiveMessage()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 12L3 20l3.563-8L3 4zM6.5 12H22" />
                </svg>
            </div>
        </div>
    </div>

    <script>
        const chatMessages = document.getElementById('chat-messages');
        const userInput = document.getElementById('user-input');

        function sendMessage(message, sender) {
            const chatMessage = document.createElement('div');
            chatMessage.classList.add('message');
            chatMessage.innerText = message;
            chatMessage.classList.add(sender + '-message');
            chatMessages.appendChild(chatMessage);
            chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll naar beneden
        }

        function receiveMessage() {
            const question = userInput.value.trim().toLowerCase();
            if (question !== '') {
                chatMessages.innerHTML = ''; // Verwijder alle berichten
                sendMessage(question, 'user');
                // Voeg hier de logica toe om te reageren op verschillende vragen
                switch (question) {
                    case 'Hallo':
                        sendMessage('Hallo, ik ben Jill, waarmee kan ik je helpen?', 'Jill');
                        break;
                    case 'wat is een begroting?':
                        sendMessage('Een begroting is een plan van de verwachte inkomsten en uitgaven van een organisatie voor een bepaalde periode, meestal een jaar.', 'Jill');
                        break;
                    case 'hoe werkt belastingheffing?':
                        sendMessage('Belastingheffing is het proces waarbij de overheid belastingen oplegt aan individuen en bedrijven om inkomsten te genereren voor openbare voorzieningen en diensten.', 'Jill');
                        break;
                    default:
                        sendMessage('Sorry, ik begrijp niet wat je bedoelt.', 'Jill');
                        break;
                }
                userInput.value = ''; // Reset het invoerveld
            }
        }

        function resetChat() {
            chatMessages.innerHTML = ''; // Verwijder alle berichten
            userInput.value = ''; // Reset het invoerveld
        }

        userInput.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                receiveMessage();
            }
        });
    </script>
</body>

</html>