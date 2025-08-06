import 'bootstrap';
import '../css/app.css';
import { main } from '@popperjs/core';

window.toggleNoteCreator = toggleNoteCreator;

function toggleNoteCreator(mainContainer, childElement, idCategorie)

{
    let firstElement  = document.getElementById(mainContainer);
    let secondElement = document.getElementById(childElement);
    document.getElementById('idNoteCategories').value = idCategorie;

        if (!secondElement.classList.contains('active'))
            {
            secondElement.classList.add('active');
            secondElement.classList.remove('d-none');
            secondElement.style.zIndex = 1;
        }else{
            
            firstElement.classList.remove('disableInteration')
            firstElement.classList.remove('blurBackGround')
            secondElement.classList.remove('active');
            secondElement.classList.add('d-none');
        }
        document.addEventListener('click', function (elementBeingClicked)
        {
            let element = document.getElementById(elementBeingClicked.target.id);

           for (let i = 0; i < element.children.length; i++)
           {
                console.log(element.children[i])
                if (element.children[i].classList.contains('dashboard-view'))
                {
                    secondElement.classList.remove('active');
                    secondElement.classList.add('d-none');
                }
           }
            
        });
    }