const sumar = (val1, val2) => (parseInt(val1) + parseInt(val2));
const restar = (val1, val2) => (parseInt(val1) - parseInt(val2));
const multiplicar = (val1, val2) => (parseInt(val1) * parseInt(val2));
const dividir = (val1, val2) => (parseInt(val1 )/ parseInt(val2));

function inputsForm(){
    let form = document.createElement('form')
    let input1 = document.createElement('input')
    let input2 = document.createElement('input')
    let button = document.createElement('button')
    let respuestaContainer = document.createElement('div')
    respuestaContainer.setAttribute('id', 'respuesta')
    form.setAttribute('id', 'form')
    form.setAttribute('enctype', 'multipart/form-data')
    input1.setAttribute("type", "number");
    input2.setAttribute("type", "number");
    button.setAttribute("type", "submit");
    button.innerHTML = 'Calcular'
    document.querySelector('#app').appendChild(form)
    document.querySelector('#form').appendChild(input1)
    document.querySelector('#form').appendChild(input2)
    document.querySelector('#form').appendChild(button)
    document.querySelector('#app').appendChild(respuestaContainer)
    form.addEventListener('submit', (e)=>{
        e.preventDefault()
        if(input1.value !== '' && input2.value !== ''){
            respuestaContainer.innerHTML = `
            la Suma es: ${sumar(input1.value, input2.value)} <br/>
            la Resta es: ${restar(input1.value, input2.value)} <br/>
            la Multiplicacion es: ${multiplicar(input1.value, input2.value)} <br/>
            la division es: ${dividir(input1.value, input2.value)} <br/>
            `;
        }else{
            alert('Llene los dos campos')
        }
       
    })
}



inputsForm()