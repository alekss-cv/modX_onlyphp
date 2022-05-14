var myButton = document.querySelector('.bcg_button')
function userNameAge() {

let name = prompt ("Добро пожаловать на мой сайт !\nМое имя Саша ,  \nА тебя как зовут ?");
  if (name === ("Сережа" || "сережа" ||"Сергей"|| "сергей")){
    alert (`ОООООО мой бог , какое имя`)
  } if (name === ("Саша" || "саша" || " Александр")){
    alert('Добро пожаловать , мой ГОСПОДИН !!!')

  } else{
    alert (`${name} , ох , твое имя прекрасно ! `)
  }

let age = prompt(" сколько тебе лет ? " );
  if (age == 19)  {
    alert(`Саша , тебе ${age} лет !`)
  } if (age == 13){
    alert(`Дароу Серый `)
  } if  (age > 19 || age < 100){
    alert(`${name} , тебе уже ${age} лет \nне трать время в пустую.. мой тебе совет.`)
  } if  (age >= 100){
    alert (` ты что , бессмертный ?`)
  } else{
    alert( "ДЕЛАТЬ ДЕНЬГИ БЛ ВОТ ТАК ")
  }
}
myButton.onclick = function() {
  userNameAge();
}