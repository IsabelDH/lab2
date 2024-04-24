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
}

userInput.addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        receiveMessage();
    }
});
