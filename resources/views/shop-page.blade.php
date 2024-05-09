<x-head/>
<body>
    
    
      <!-- NAVBAR -->
      <x-navbar/>
    <div class="divider"></div>

<div class="shopContainer">

  <div class="shopSortSection">
    <div class="left">
      <h3>
     
         Produse</h3>
    </div>
   
  </div>


    <div class="gridParentForShop">
        <div class="child1">
            <div class="sidebarContent">
                <div class="categorySection">
                    <h3>Categorii</h3>
                    
                    <ul class="categoryList">
                       @foreach ($productCategories as $element)
                       <li  onclick="location.href='#';" style="cursor: pointer;">{{$element->name_category}}</li>

                       @endforeach
                        
                        
                    </ul>
                </div>
                <div class="priceSection">
                    <h3>Pret</h3>
                  <div class="slidecontainer">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </div>
                </div>
                
             </div>

        </div>
        <div class="child2">

            <div class="secondSection">
                
                <div class="productsGrid shopPageGrid">
                  
               @foreach ($products as $element)
               <div class="productElement" onclick="location.href='{{ route('single-product', ['id' => $element->product_id]) }}';" style="cursor: pointer;">
                <div class="productElementContainer">
                  <p class="moreinfo">{{$element->kg}} kg</p>
                  <img class="productElementImg" src="./storage/{{$element->photo}}" alt="oranges" srcset="">
                  <div class="productElementInfo">
                    <p class="productElementCat">{{$element->catgory}}</p>
                    <p class="productElementName">{{$element->name}}</p>
                    <p class="price">{{$element->price}} Lei</p>
                  </div>
                </div>
              </div>
               @endforeach
              
                
                
                
                 
               
               
              </div>

              <div>

                {{-- {{$products->links()}}   --}}
                @if($products instanceof \Illuminate\Pagination\AbstractPaginator)
                   {{ $products->links() }}
                @endif

               </div>
              

              </div>
             
        </div>
    </div>

</div>



<!-- FOOTER -->
<x-footer-default/>


</body>
</html>