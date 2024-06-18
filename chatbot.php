<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="styles/chatbot.css">
</head>

<body>
    <div class="jill" onclick="toggleChatbot()">
        <h2>1</h2>
        <img src="images/jill_75.png" alt="chatbot">
    </div>
    <div class="chat-container hidden">
        <div class="chat-header">
            <h3>Chatbot Jill 👋</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 36 36" id="close-chat">
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
        const chatMessages = document.querySelector('#chat-messages');
        const userInput = document.querySelector('#user-input');
        const chatContainer = document.querySelector('.chat-container');
        const jillButton = document.querySelector('.jill');
        const closeChatBtn = document.querySelector('#close-chat');

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
                    case 'hallo':
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
            if (window.innerWidth < 1000) { // Alleen voor mobiele apparaten en tablets
                chatContainer.classList.add('hidden');
                chatContainer.style.display = 'none'; // Verberg de chatcontainer
                jillButton.classList.remove('hidden');
                jillButton.style.display = 'block'; // Maak de knop weer zichtbaar
            } else { // Voor desktop
                chatContainer.style.display = 'none'; // Verberg de chatcontainer
                jillButton.style.display = 'block'; // Maak de knop weer zichtbaar
            }
        }

        function toggleChatbot() {
            if (window.innerWidth < 1000) { // Alleen voor mobiele apparaten en tablets
                jillButton.classList.add('hidden');
                chatContainer.classList.remove('hidden');
                chatContainer.style.display = 'block';
            } else { // Voor desktop
                jillButton.style.display = 'none';
                chatContainer.style.display = 'block';
            }
        }

        closeChatBtn.addEventListener('click', resetChat);

        userInput.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                receiveMessage();
            }
        });

        // Zorg ervoor dat de chatcontainer standaard zichtbaar is op desktop
        if (window.innerWidth >= 1000) {
            chatContainer.classList.remove('hidden');
            chatContainer.style.display = 'block';
            jillButton.classList.add('hidden');
            jillButton.style.display = 'none';
        }
    </script>
</body>

</html>