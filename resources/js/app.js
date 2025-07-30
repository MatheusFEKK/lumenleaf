import 'bootstrap';
import '../css/app.css';
import { main } from '@popperjs/core';

window.toggleNoteCreator = toggleNoteCreator;

function toggleNoteCreator(mainContainer, childElement, interationAndBlur)

{
    let firstElement  = document.getElementById(mainContainer);
    let secondElement = document.getElementById(childElement);

        if (!secondElement.classList.contains('active'))
            {
                if (interationAndBlur === true)
                {
                    firstElement.classList.add('disableInteration');
                    firstElement.classList.add('blurBackGround');
                }
            secondElement.classList.add('active');
            secondElement.classList.remove('d-none');
        }else{
            firstElement.classList.remove('disableInteration')
            firstElement.classList.remove('blurBackGround')
            secondElement.classList.remove('active');
            secondElement.classList.add('d-none');
        }
        
        document.onclick = (element) => {
            if (element.target.id != 'elementHide')
            {
                console.log("Closing " + element.target.id);
                firstElement.classList.remove('disableInteration')
                firstElement.classList.remove('blurBackGround')
                secondElement.classList.remove('active');
                secondElement.classList.add('d-none');
            }
        }
    }