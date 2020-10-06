'use strict'

charaA.addEventListener('click', function() {
  if (nameid.value == "") {
    alert('なまえをかいてください');
    return;
  };
  if (confirm('むらびとAでよろしいですか？')) {
    document.getElementById('character').value = "A"
    form_control.submit();
  }
});

charaB.addEventListener('click', function() {
  if (nameid.value == "") {
    alert('なまえをかいてください');
    return;
  };
  if (confirm('むらびとBでよろしいですか？')) {
    document.getElementById('character').value = "B"
    form_control.submit();
  }
});

charaC.addEventListener('click', function() {
  if (nameid.value == "") {
    alert('なまえをかいてください');
    return;
  };
  if (confirm('むらびとCでよろしいですか？')) {
    document.getElementById('character').value = "C"
    form_control.submit();
  }
});
