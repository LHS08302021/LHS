function setAddRow(body, btn){
  const tbody = document.getElementById(body);
  const addTierBtn = document.getElementById(btn);

  addTierBtn.addEventListener('click', () => {
    let rows = tbody.childElementCount;
    let tierNumber = rows + 1;
    console.log(rows);
    if(rows < 8) {
      let tr = document.createElement('tr');
      for (let index = 0; index < 4; index++) {
        let td = document.createElement('td');
        let input = document.createElement('input');
        let icon = document.createElement('i');

        switch (index) {
          case 0:
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'sc_' + tierNumber);
            input.setAttribute('class', 'form-control');
            input.setAttribute('placeholder', 'Subject Code here...');
            td.appendChild(input);
            break;
          case 1:
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'sn_' + tierNumber);
            input.setAttribute('class', 'form-control');
            input.setAttribute('placeholder', 'Subject Name here...');
            td.appendChild(input);
            break;
          case 2:
            input.setAttribute('type', 'text');
            input.setAttribute('name', 'dsc_' + tierNumber);
            input.setAttribute('class', 'form-control');
            input.setAttribute('placeholder', 'Description here...');
            td.appendChild(input);
            break;
          case 3:
            td.setAttribute('class', 'text-center align-middle');
            icon.setAttribute('class', 'far fa-times-circle text-danger fa-fw fa-lg');
            td.appendChild(icon);

            td.addEventListener('click', () => {
              addTierBtn.classList.replace('d-none', 'd-block');
              td.parentElement.remove();
            });
            break;
          default:
            break;
        }
        
        tr.appendChild(td);
      }
      tbody.appendChild(tr);

      if(rows === 8) {
        addTierBtn.classList.toggle('d-none');
      }
    } else addTierBtn.classList.toggle('d-none');
  });
}