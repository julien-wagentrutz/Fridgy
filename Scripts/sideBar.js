// Récuperer la date d'expiration
// Mettre la date de péremption dans l'html à .expiryDate 
// Savoir le nombre de jour entre la date d'expiration et la date d'aujourd'hui 
// Mettre le nombre de jour dans .daysLeft

const daysLeftElement = document.querySelector('.js-daysLeft')
const timeBarElement = document.querySelector('.js-fillTimeBar')
const daysElement = document.querySelector('.js-days')
const cardElement = document.querySelector('.productCard')
let numberDays = daysLeftElement.innerText

let numberDaysValue = 0 + '.' + numberDays
let a = 1 - numberDaysValue


if(numberDays >= 10)
{
    timeBarElement.style.transform = 'scaleX(0.1)'
    timeBarElement.style.background = 'var(--green-color)'
    daysLeftElement.style.color = 'var(--green-color)'
    daysElement.style.color = 'var(--green-color)'
}
else if(numberDays < 10 && numberDays > 3)
{    
    timeBarElement.style.transform = 'scaleX('+a+')'
    timeBarElement.style.background = 'var(--green-color)'
    daysLeftElement.style.color = 'var(--green-color)'
    daysElement.style.color = 'var(--green-color)'
}
else if (numberDays <= 3 && numberDays > 0)
{
    timeBarElement.style.transform = 'scaleX('+a+')'
    timeBarElement.style.background = 'var(--red-color)'
    daysLeftElement.style.color = 'var(--red-color)'
    daysElement.style.color = 'var(--red-color)'
}else
{
    timeBarElement.style.transform = 'scaleX(1)'
    timeBarElement.style.background = 'var(--red-color)'
    daysLeftElement.style.color = 'var(--red-color)'
    daysElement.style.color = 'var(--red-color)'
    cardElement.style.background = '#FCA8A8'
}