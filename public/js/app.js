// Number Counter Up
var mb = document.querySelector('.Counter_menber h1')
var gt = document.querySelector('.Counter_ghetham h1')
var tk = document.querySelector('.Counter_thietke h1')
var hl = document.querySelector('.Counter_hailong h1')




function count(el, to){
    var count = 0;

    let counting = setInterval(() => {
      count += to / 500
      if(count > to){
        clearInterval(counting)
        el.innerText = to
      }else{
        el.innerText = Math.round(count)
      }

    }, 1);

}

count(mb, 3300)
count(gt, 1880)
count(tk, 968)
count(hl, 1124)
