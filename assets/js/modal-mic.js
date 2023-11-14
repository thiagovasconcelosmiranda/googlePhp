if (document.querySelector('.mic')) {

    document.getElementById('close').addEventListener('click', () => {
        document.querySelector('.container-mic').style.display = "none";
    });

    document.querySelector('.mic').addEventListener('click', () => {
        document.querySelector('.container-mic').style.display = "block";
        msgTextMic();
    });
}


function msgTextMic() {
    let text = document.getElementById('text-msg');
    setTimeout(() => {
        text.innerHTML = "Fale Fgora";
    }, 1000);

    setTimeout(() => {
        text.innerHTML = "Ouvindo...";
    }, 1000);

    setTimeout(() => {

        text.innerHTML = `Verifique o microfone os níveis de áudios. <a href="${base}">Saiba mais</a>`;
    }, 4000);

    setTimeout(() => {
        document.querySelector('.container-mic').style.display = "none";
    }, 65000);
}

createRecognition();

function createRecognition() {
    const SpeechRecognition = window.SpeechRecognition ||
        window.webkitSpeechRecognition;
    const recognition = SpeechRecognition !== undefined ? new SpeechRecognition() : null;

    if (recognition) {
        // alert("Speech Recognition is not found");
        return null;
    }

    recognition.lang = "pt_BR";

    recognition.onstart = () => console.log('start');
    recognition.onend = () => console.log('finished');
    recognition.onerror = e => console.log('error', e);
    recognition.onresult = e => console.log(e.resukt[0][0].transcript);

    return recognition;
}