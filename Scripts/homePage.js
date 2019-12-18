const menuButtonElement1= document.querySelector('.js-menu-button1')
const menuButtonElement2= document.querySelector('.js-menu-button2')
const menuElement= document.querySelector('.js-menu')


menuButtonElement1.addEventListener('click', function()
{
    menuElement.classList.toggle('is-active')

})

menuButtonElement2.addEventListener('click', function()
{
    menuElement.classList.toggle('is-active')

})

document.addEventListener('keydown', (event) =>
{
    if(event.key === 'Escape' && menuElement.classList.contains('is-active'))
    {
        menuElement.classList.remove('is-active')
        
    }
})

