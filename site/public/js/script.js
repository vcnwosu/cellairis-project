function toggleClass(elem, class1, class2) {
  if(elem.className.indexOf(class1) > -1) {
    elem.className = elem.className.replace(class1, class2);
  } else {
    elem.className = elem.className.replace(class2, class1);
  }
}

(function() {
  document.getElementById('hmbg').addEventListener('click', function(e) {
    toggleClass(e.currentTarget.previousElementSibling, 'cell-hide', '');
    toggleClass(e.currentTarget, 'menu-opened', '');
  });
})();
