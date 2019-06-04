    <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>
    <script>
        /**
        * Función cambiar permite alterar el color ccs de Body
        * @returns {void}
        */
		function cambiar() {
			document.getElementById('body').style.backgroundColor='#636363';
            <?php
            /**
            *SetCookie que almacena el estilo de interfaz que
            *el usuario esté implementando
            **/
                setcookie("Interfaz","Dark", time()+300);?>
		}
        /**
        * Función cambiar permite alterar el color ccs de Body
        * @returns {void}
        */
		function cambiar2() {
			document.getElementById('body').style.backgroundColor='white';
            <?php
            /**
            *SetCookie que almacena el estilo de interfaz que
            *el usuario esté implementando
            **/
                setcookie("Interfaz", "Light", time()+300);?>
		}
	</script>
</body>
</html>
