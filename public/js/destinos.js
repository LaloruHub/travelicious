window.onload = () =>{
  let form = document.getElementById('form_filtros');
  document.getElementById('filtros').addEventListener('change', () => {
    form.submit();
  } );
}