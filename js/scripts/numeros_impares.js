let text = ''
for (let index = 100; index <= 150; index++) {
    if(index % 2 !== 0){
          text += index+'<br />';
    }
 }

document.querySelector('#app').innerHTML = text