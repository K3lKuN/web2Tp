function filtreTable() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("InputSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

    // Reset de l'affichage dans le cas d'un ":" en 2eme position
    if(filter.charAt(1) == ":" && filter.length >= 2){
      for (i = 0; i < tr.length; i++) {
        tr[i].style.display = "";
      } 

      //Split au ":"
      var filters = filter.split(":");
      var colonne = 0;
      //Case break pour filtrer la colonne
      switch(filters[0]){
        case 'P':
          colonne = 0;
          break;
        case 'N':
          colonne = 1;
          break;
        case "F":
          colonne = 2;
          break;
        case "A":
          colonne = 3;
          break;
      }
      //Vérifie qu'il y est plus de 2 caractère car inférieur, correspond au séparateur, et à la valeur de recherche
      if(filter.length > 2){
        //Boucle de recherc
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[colonne];
          if (td && td2) {
            if (td.innerHTML.toUpperCase().indexOf(filters[1]) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          } 
        }
      }

    }
    else{
      //Boucle de recherche
      for (i = 0; i < tr.length; i++) {
        //Recherche dans la première et deuxième colonne pour nom, et prénom
        td = tr[i].getElementsByTagName("td")[0];
        td2 = tr[i].getElementsByTagName("td")[1];
        if (td && td2) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        } 
      }
    }
}