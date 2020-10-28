
            $(document).ready(function(){


                var cooperativa_filtro = document.getElementById('cooperativa_filtro');
                cooperativa_filtro.innerHTML = '';
    
                var arrayCooperativas = tienda;
                var arrayLista = new Array;
               
                
               for (const item of arrayCooperativas) {
    
                var total = item.empresa;
                arrayLista.push(total);
                   
               }
    
               var nuevoElemento = arrayLista;
               
               let unicos = Array.from(new Set(nuevoElemento))
               
    
               for (const nuevo of unicos) {
    
                cooperativa_filtro.innerHTML += ` 
                        <option value="${nuevo}">${nuevo}</option>
                    `;
                }
    
                
                  
            });