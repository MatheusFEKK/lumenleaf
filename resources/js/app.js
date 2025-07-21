import 'bootstrap';
import '../css/app.css';

window.toggleNoteCreator = toggleNoteCreator;

function toggleNoteCreator()
{
    let mainContainer      = document.getElementById('main-panel');
    let noteCreatorElement = document.getElementById('creatorNote');
    
    
    if (!noteCreatorElement.classList.contains('active'))
        {
        mainContainer.classList.add('disableInteration')
        mainContainer.classList.add('blurBackGround')
        noteCreatorElement.classList.add('active');
        noteCreatorElement.classList.remove('d-none');
    }else{
        mainContainer.classList.remove('disableInteration')
        mainContainer.classList.remove('blurBackGround')
        noteCreatorElement.classList.remove('active');
        noteCreatorElement.classList.add('d-none');
    }
}