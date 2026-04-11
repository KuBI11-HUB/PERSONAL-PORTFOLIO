// --- NAVBAR TOGGLE ---
const menuIcon = document.querySelector('#menu-icon');
const navbar = document.querySelector('.navbar');

if (menuIcon) {
    menuIcon.onclick = () => {
        menuIcon.classList.toggle('bx-x');
        navbar.classList.toggle('active');
    };
}


document.addEventListener('DOMContentLoaded', loadMessages);

function loadMessages() {
    const inbox = document.getElementById('inbox-content');
    if (!inbox) return;

    fetch('get_message.php')  
        .then(res => res.json())
        .then(messages => {
        console.log("Messages received:", messages); 
        messages.reverse();
        inbox.innerHTML = '';

        if (!messages.length) {
            inbox.innerHTML = `
                <p style="padding:10px; text-align:center;">No messages found.</p>
            `;
            return;
        }

        messages.forEach(msg => {
            console.log("Processing message:", msg); 
            
            const item = document.createElement('div');
            item.classList.add('dropdown-message');
            item.style.padding = '15px';
            item.style.borderBottom = '1px solid #ccc';
            item.style.fontSize = '1.4rem';
            item.style.color = '#333';

            item.innerHTML = `
                <strong style="color:#7210c9;">${msg.Name || 'Unknown'}</strong><br>
                <small style="color:#666;">${msg.Subject || 'No Subject'}</small><br>
                <small style="display:block;">Email: ${msg.Email || 'Unknown'}</small>
                ${msg.Phone ? '<small style="display:block;">Phone: ' + msg.Phone + '</small>' : ''}
                <p>${msg.Message || ''}</p>
            `;  

            inbox.appendChild(item);
        });
    })
        .catch((error) => {
            console.error("Error loading messages:", error); 
            inbox.innerHTML = `
                <p style="padding:10px; color:black;">Error loading messages.</p>
            `;
        });
}