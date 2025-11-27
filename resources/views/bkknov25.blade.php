@extends('layouts.appuae')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    <h5>(ORDER LIST -FINAL 21 NOV 25 | THB 88,309.00  | US$4,860.97.00  | MVR 1,02081.00)</h5>
                    <h5>SUPPLIER : VARIOUS |  FREIGHTFORWARDER: A PLUS CONNEX CO LTD </h5>
                    <a class="nav-link link-primary" href="{{route('uaelist')}}">GO TO ORDER LIST 1 UAE</a>
                       <!-- <h6>SUPPLIER : UAE-COSM-PAR-2025-01</h6> -->
                  <table class="w-full border-collapse border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2 text-left">#</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">ITEM</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">PKG</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">QTY</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">PRICE</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">TOTAL</th>
                         <th class="border border-gray-300 px-4 py-2 text-left">STATUS</th>
                          <th class="border border-gray-300 px-4 py-2 text-left">UNIT-PRICE</th>

                       
                       
            

                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">Pens mix brands (cello/ ball point/gel) </td>
                        <td class="border border-gray-300 px-4 py-2"> PCS</td>
                        <td class="border border-gray-300 px-4 py-2"> CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                       
                        
           

                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">2</td>
                        <td class="border border-gray-300 px-4 py-2"> Glitter pen set</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                       
                        
                
                    </tr>

                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">3</td>
                        <td class="border border-gray-300 px-4 py-2"> Erasers mix brands ( dust free/ normal)</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                       
                        
                
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">4</td>
                        <td class="border border-gray-300 px-4 py-2"> pencils normal type</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                   
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">5</td>
                        <td class="border border-gray-300 px-4 py-2"> pencils normal type</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">6</td>
                        <td class="border border-gray-300 px-4 py-2"> Colour pencil box (24olour) mix brands</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">7</td>
                        <td class="border border-gray-300 px-4 py-2"> Colour pencil box ( 48 colour) mix brands</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">8</td>
                        <td class="border border-gray-300 px-4 py-2">Crayons mix brands ( 12 colours)</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>

                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">9</td>
                        <td class="border border-gray-300 px-4 py-2"> Crayons mix brands ( 24  colours)</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">10</td>
                        <td class="border border-gray-300 px-4 py-2"> Slime  mix sizes</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">11</td>
                        <td class="border border-gray-300 px-4 py-2"> Mud slime mix sizes</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">12</td>
                        <td class="border border-gray-300 px-4 py-2">Clay mix brands</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">13</td>
                        <td class="border border-gray-300 px-4 py-2">Modelling Dough</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">14</td>
                        <td class="border border-gray-300 px-4 py-2"> Permanent marker blue mix brands</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">15</td>
                        <td class="border border-gray-300 px-4 py-2"> Permanat marker black mix brands</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">16</td>
                        <td class="border border-gray-300 px-4 py-2"> Highligter marker </td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">17</td>
                        <td class="border border-gray-300 px-4 py-2"> Scissors mix brands/ sizes</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">18</td>
                        <td class="border border-gray-300 px-4 py-2"> Pencil Sharpener mix</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">19</td>
                        <td class="border border-gray-300 px-4 py-2"> Foam boards A3/A4 </td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">20</td>
                        <td class="border border-gray-300 px-4 py-2"> Fiba set</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">21</td>
                        <td class="border border-gray-300 px-4 py-2">Packing tape 30m/50m/500m</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">22</td>
                        <td class="border border-gray-300 px-4 py-2"> Note books</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">23</td>
                        <td class="border border-gray-300 px-4 py-2"> Punch file</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">24</td>
                        <td class="border border-gray-300 px-4 py-2"> Squeeze toys Animals/fruits etc</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">25</td>
                        <td class="border border-gray-300 px-4 py-2">Toy car/ bus frictio or remote controlled</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">26</td>
                        <td class="border border-gray-300 px-4 py-2"> Balls small/football</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">27</td>
                        <td class="border border-gray-300 px-4 py-2"> Bubble bottles</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">28</td>
                        <td class="border border-gray-300 px-4 py-2"> Play sets Barbie/ tools/ educational toys</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">29</td>
                        <td class="border border-gray-300 px-4 py-2"> Dinner plates plastic quality wise</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">30</td>
                        <td class="border border-gray-300 px-4 py-2"> pots or pans sets non-stick with lid</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">31</td>
                        <td class="border border-gray-300 px-4 py-2"> Aluminium dotted pan sets with lid</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">32</td>
                        <td class="border border-gray-300 px-4 py-2"> Frying pan  with lid mix sizes</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">33</td>
                        <td class="border border-gray-300 px-4 py-2"> folhi fihaa thava</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">34</td>
                        <td class="border border-gray-300 px-4 py-2"> jugs mix plastic</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">35</td>
                        <td class="border border-gray-300 px-4 py-2"> spoon/ forks metal</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">36</td>
                        <td class="border border-gray-300 px-4 py-2"> curry spoon/ rice spoon</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">37</td>
                        <td class="border border-gray-300 px-4 py-2"> Shorts for Men/ Boys </td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">38</td>
                        <td class="border border-gray-300 px-4 py-2"> Boxer underwear Boys/ Men mix sizes</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">39</td>
                        <td class="border border-gray-300 px-4 py-2"> Boxer underwaer Ladies mix sizes</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">40</td>
                        <td class="border border-gray-300 px-4 py-2"> pillow</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">41</td>
                        <td class="border border-gray-300 px-4 py-2"> Slipper gents mix brands </td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">42</td>
                        <td class="border border-gray-300 px-4 py-2">slipper ladies mix sizes</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">43</td>
                        <td class="border border-gray-300 px-4 py-2"> Socks black all sizes -school wear</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">44</td>
                        <td class="border border-gray-300 px-4 py-2"> blankets</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">45</td>
                        <td class="border border-gray-300 px-4 py-2"> Bedsheet double</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">46</td>
                        <td class="border border-gray-300 px-4 py-2"> Bedsheet king</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">47</td>
                        <td class="border border-gray-300 px-4 py-2"> Bedsheet Queen</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">48</td>
                        <td class="border border-gray-300 px-4 py-2">Door mat</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">49</td>
                        <td class="border border-gray-300 px-4 py-2"> Rain coats disposable</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">50</td>
                        <td class="border border-gray-300 px-4 py-2"> Cotton gloves ( for workers)</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">51</td>
                        <td class="border border-gray-300 px-4 py-2"> Mats</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">52</td>
                        <td class="border border-gray-300 px-4 py-2"> Umbrella L/XL</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                                <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">53</td>
                        <td class="border border-gray-300 px-4 py-2"> Steel wool /sponge</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">0</td>
                    </tr>
                            <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">54</td>
                        <td class="border border-gray-300 px-4 py-2"> crap paper</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">55</td>
                        <td class="border border-gray-300 px-4 py-2"> white board</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">56</td>
                        <td class="border border-gray-300 px-4 py-2"> googley eyes</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>

                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">57</td>
                        <td class="border border-gray-300 px-4 py-2"> cutter</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">58</td>
                        <td class="border border-gray-300 px-4 py-2"> party item</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                     <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">59</td>
                        <td class="border border-gray-300 px-4 py-2"> rope roll</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                     <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">60</td>
                        <td class="border border-gray-300 px-4 py-2"> transparent file</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>

                     <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">60</td>
                        <td class="border border-gray-300 px-4 py-2"> pencil set</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">61</td>
                        <td class="border border-gray-300 px-4 py-2"> pencil / pen display</td>
                        <td class="border border-gray-300 px-4 py-2">PCS</td>
                        <td class="border border-gray-300 px-4 py-2">CTN</td>
                        <td class="border border-gray-300 px-4 py-2">0</td>
                         <td class="border border-gray-300 px-4 py-2">0</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">62</td>
                        <td class="border border-gray-300 px-4 py-2"> lady slipper kentos 5-8</td>
                        <td class="border border-gray-300 px-4 py-2">1x12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">65.00</td>
                         <td class="border border-gray-300 px-4 py-2">810.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">44.00</td>
                          
                    </tr>
  <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">63</td>
                        <td class="border border-gray-300 px-4 py-2"> lady slipper kentos 8-13</td>
                        <td class="border border-gray-300 px-4 py-2">1x12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">68.00</td>
                         <td class="border border-gray-300 px-4 py-2">780.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">46.00</td>
                          
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">64</td>
                        <td class="border border-gray-300 px-4 py-2"> lady slipper </td>
                        <td class="border border-gray-300 px-4 py-2">1x12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">36.00</td>
                         <td class="border border-gray-300 px-4 py-2">430.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">25.00</td>
                          
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">65</td>
                        <td class="border border-gray-300 px-4 py-2"> boy slipper </td>
                        <td class="border border-gray-300 px-4 py-2">1x12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">80.00</td>
                         <td class="border border-gray-300 px-4 py-2">960.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">55.00</td>
                          
                    </tr>
                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">66</td>
                        <td class="border border-gray-300 px-4 py-2"> boy slipper </td>
                        <td class="border border-gray-300 px-4 py-2">1x30 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">30 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">135.00</td>
                         <td class="border border-gray-300 px-4 py-2">4050.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">91.00</td>
                          
                    </tr>
                             <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">67</td>
                        <td class="border border-gray-300 px-4 py-2"> lady shoe </td>
                        <td class="border border-gray-300 px-4 py-2">P1x6 pcsCS</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">185.00</td>
                         <td class="border border-gray-300 px-4 py-2">1110.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">125.00</td>
                          
                    </tr>
                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">68</td>
                        <td class="border border-gray-300 px-4 py-2"> lady shoe </td>
                        <td class="border border-gray-300 px-4 py-2">1x6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">200</td>
                         <td class="border border-gray-300 px-4 py-2">1200</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">135.00</td>
                          
                    </tr>

                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">69</td>
                        <td class="border border-gray-300 px-4 py-2"> lady shoe </td>
                        <td class="border border-gray-300 px-4 py-2">1x6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">195.000</td>
                         <td class="border border-gray-300 px-4 py-2">1170.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">132.00</td>
                          
                    </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">70</td>
                        <td class="border border-gray-300 px-4 py-2"> lady shoe </td>
                        <td class="border border-gray-300 px-4 py-2">1x6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">195.00</td>
                         <td class="border border-gray-300 px-4 py-2">1170.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">132.00</td>
                          
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">71</td>
                        <td class="border border-gray-300 px-4 py-2"> men slipper </td>
                        <td class="border border-gray-300 px-4 py-2">1x6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">50.00</td>
                         <td class="border border-gray-300 px-4 py-2">300</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">34.00</td>
                          
                    </tr>

                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">72</td>
                        <td class="border border-gray-300 px-4 py-2">men slipper </td>
                        <td class="border border-gray-300 px-4 py-2">1x6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">50.00</td>
                         <td class="border border-gray-300 px-4 py-2">300.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">34.00</td>
                          
                    </tr>

                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">73</td>
                        <td class="border border-gray-300 px-4 py-2"> men slipper </td>
                        <td class="border border-gray-300 px-4 py-2">1x6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">50.00</td>
                         <td class="border border-gray-300 px-4 py-2">300.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">34.00</td>
                          
                    </tr>
                    
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">74</td>
                        <td class="border border-gray-300 px-4 py-2"> boy shoes </td>
                        <td class="border border-gray-300 px-4 py-2">1x12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">120</td>
                         <td class="border border-gray-300 px-4 py-2">1440.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">82.00</td>
                          
                    </tr>
                    
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">75</td>
                        <td class="border border-gray-300 px-4 py-2"> boy shoes </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">125.00</td>
                         <td class="border border-gray-300 px-4 py-2">1500</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">85.00</td>
                          
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">76</td>
                        <td class="border border-gray-300 px-4 py-2"> boy shoes </td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">120.00</td>
                         <td class="border border-gray-300 px-4 py-2">720.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">82.00</td>
                          
                    </tr>




                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">77</td>
                        <td class="border border-gray-300 px-4 py-2"> boy shoes </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">120.00</td>
                         <td class="border border-gray-300 px-4 py-2">1440.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">82.00</td>
                          
                    </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">78</td>
                        <td class="border border-gray-300 px-4 py-2"> boy shoes </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">120.00</td>
                         <td class="border border-gray-300 px-4 py-2">720.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">82.00</td>
                          
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">79</td>
                        <td class="border border-gray-300 px-4 py-2"> rain court disposable </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 3000 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">3000 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">10.00</td>
                         <td class="border border-gray-300 px-4 py-2">3000.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">7.00</td>
                          
                    </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">80</td>
                        <td class="border border-gray-300 px-4 py-2"> umbrella  16 rib</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">80.00</td>
                         <td class="border border-gray-300 px-4 py-2">960.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">54.00</td>
                          
                    </tr>

                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">81</td>
                        <td class="border border-gray-300 px-4 py-2"> umbrella 28" </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">125.00</td>
                         <td class="border border-gray-300 px-4 py-2">750.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">85.00</td>
                          
                    </tr>
                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">81</td>
                        <td class="border border-gray-300 px-4 py-2"> umbrella 24" mix </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">125.00</td>
                         <td class="border border-gray-300 px-4 py-2">960.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">108.00</td>
                          
                    </tr>
                         <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">81</td>
                        <td class="border border-gray-300 px-4 py-2"> hand gloves </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 20 doz</td>
                        <td class="border border-gray-300 px-4 py-2">240 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">75.00</td>
                         <td class="border border-gray-300 px-4 py-2">1500.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">9.00</td>
                          
                    </tr>
                        <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">82</td>
                        <td class="border border-gray-300 px-4 py-2"> rope small</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 3 pkg</td>
                        <td class="border border-gray-300 px-4 py-2">3 pkt pcs</td>
                        <td class="border border-gray-300 px-4 py-2">150.00</td>
                         <td class="border border-gray-300 px-4 py-2">450.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">16.00</td>
                          
                    </tr>
                                 <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">83</td>
                        <td class="border border-gray-300 px-4 py-2"> rope medium</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 3 pkg</td>
                        <td class="border border-gray-300 px-4 py-2">3 pkt pcs</td>
                        <td class="border border-gray-300 px-4 py-2">240.00</td>
                         <td class="border border-gray-300 px-4 py-2">720.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">27.00</td>
                          
                    </tr>

                                  <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">84</td>
                        <td class="border border-gray-300 px-4 py-2"> mat</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 15 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">15 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">95.00</td>
                         <td class="border border-gray-300 px-4 py-2">1425.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">63.00</td>
                          
                    </tr>
                              <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">84</td>
                        <td class="border border-gray-300 px-4 py-2"> rain court kids</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 24 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">24 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">520.00</td>
                         <td class="border border-gray-300 px-4 py-2">1040.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">29.00</td>
                          
                    </tr>

      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">85</td>
                        <td class="border border-gray-300 px-4 py-2"> gel pen </td>
                        <td class="border border-gray-300 px-4 py-2">50 per box x20</td>
                        <td class="border border-gray-300 px-4 py-2">1000 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">115.00</td>
                         <td class="border border-gray-300 px-4 py-2">2300.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">1.56</td>
                          
                    </tr>

      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">86</td>
                        <td class="border border-gray-300 px-4 py-2">colourd gel pen </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 24 set</td>
                        <td class="border border-gray-300 px-4 py-2">1000 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">80.00</td>
                         <td class="border border-gray-300 px-4 py-2">1920.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">54.00</td>
                          
                    </tr>

<tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">87</td>
                        <td class="border border-gray-300 px-4 py-2"> gel pen </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 14 set</td>
                        <td class="border border-gray-300 px-4 py-2">1000 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">72.00</td>
                         <td class="border border-gray-300 px-4 py-2">1008.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">48.77</td>
                          
                    </tr>

<tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">88</td>
                        <td class="border border-gray-300 px-4 py-2"> quantum eraser </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 48 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">48 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">190.00</td>
                         <td class="border border-gray-300 px-4 py-2">190.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">2.68</td>
                          
                    </tr>

<tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">89</td>
                        <td class="border border-gray-300 px-4 py-2"> white elephant eraser </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 50 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">50 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">70.00</td>
                         <td class="border border-gray-300 px-4 py-2">70.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">0.95</td>
                          
                    </tr>

<tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">90</td>
                        <td class="border border-gray-300 px-4 py-2"> black elephant eraser </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 50 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">50 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">75.00</td>
                         <td class="border border-gray-300 px-4 py-2">75.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">1.02</td>
                          
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">91</td>
                        <td class="border border-gray-300 px-4 py-2"> black pencil </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 576 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">576 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">145.00</td>
                         <td class="border border-gray-300 px-4 py-2">580.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">0.68</td>
                          
                    </tr>
                              <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">92</td>
                        <td class="border border-gray-300 px-4 py-2"> coloured pencil 24 </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 set</td>
                        <td class="border border-gray-300 px-4 py-2">6 set</td>
                        <td class="border border-gray-300 px-4 py-2">540.00</td>
                         <td class="border border-gray-300 px-4 py-2">540.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">61.00</td>
                          
                    </tr>

                                   <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">93</td>
                        <td class="border border-gray-300 px-4 py-2"> coloured pencil 24 </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">870.00</td>
                         <td class="border border-gray-300 px-4 py-2">870.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">49.00</td>
                          
                    </tr>

                              <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">94</td>
                        <td class="border border-gray-300 px-4 py-2"> coloured pencil 24 </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">1770.00</td>
                         <td class="border border-gray-300 px-4 py-2">1770.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">99.00</td>
                          
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">95</td>
                        <td class="border border-gray-300 px-4 py-2"> jambo crayon 12 color </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 doz</td>
                        <td class="border border-gray-300 px-4 py-2">72 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">130.00</td>
                         <td class="border border-gray-300 px-4 py-2">780.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">88.00</td>
                          
                    </tr>
                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">96</td>
                        <td class="border border-gray-300 px-4 py-2"> jambo crayon 24 color </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 1 doz</td>
                        <td class="border border-gray-300 px-4 py-2">12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">420.00</td>
                         <td class="border border-gray-300 px-4 py-2">420.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">24.00</td>
                          
                    </tr>
                           <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">97</td>
                        <td class="border border-gray-300 px-4 py-2"> clay </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 2 doz</td>
                        <td class="border border-gray-300 px-4 py-2">24 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">17.00</td>
                         <td class="border border-gray-300 px-4 py-2">408.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">12.00</td>
                          
                    </tr>

                            <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">98</td>
                        <td class="border border-gray-300 px-4 py-2"> clay </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 24 set</td>
                        <td class="border border-gray-300 px-4 py-2">24 set</td>
                        <td class="border border-gray-300 px-4 py-2">36.00</td>
                         <td class="border border-gray-300 px-4 py-2">864.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">25.00</td>
                          
                    </tr>

                              <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">99</td>
                        <td class="border border-gray-300 px-4 py-2"> pen </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 3 doz</td>
                        <td class="border border-gray-300 px-4 py-2">36 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">135.00</td>
                         <td class="border border-gray-300 px-4 py-2">405.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">91.00</td>
                          
                    </tr>

                                <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">100</td>
                        <td class="border border-gray-300 px-4 py-2"> pen </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 3 doz</td>
                        <td class="border border-gray-300 px-4 py-2">36 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">135.00</td>
                         <td class="border border-gray-300 px-4 py-2">405.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">91.00</td>
                          
                    </tr>

                                  <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">101</td>
                        <td class="border border-gray-300 px-4 py-2"> hilighter </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 5 doz</td>
                        <td class="border border-gray-300 px-4 py-2">60 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">130.00</td>
                         <td class="border border-gray-300 px-4 py-2">650.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">88.00</td>
                          
                    </tr>
                                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">102</td>
                        <td class="border border-gray-300 px-4 py-2"> sissor round tip " </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 doz</td>
                        <td class="border border-gray-300 px-4 py-2">72 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">38.00</td>
                         <td class="border border-gray-300 px-4 py-2">228.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">26.00</td>
                          
                    </tr>

                        <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">103</td>
                        <td class="border border-gray-300 px-4 py-2"> sissor 5/12" </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 5 doz</td>
                        <td class="border border-gray-300 px-4 py-2">60 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">128.00</td>
                         <td class="border border-gray-300 px-4 py-2">640.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">5</td>
                          
                                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">104</td>
                        <td class="border border-gray-300 px-4 py-2"> sissor 6" </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 5 doz</td>
                        <td class="border border-gray-300 px-4 py-2">60 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">470.00</td>
                         <td class="border border-gray-300 px-4 py-2">470.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">5</td>
                          
                    </tr>
                                          <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">105</td>
                        <td class="border border-gray-300 px-4 py-2"> sissor 7" </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 5 doz</td>
                        <td class="border border-gray-300 px-4 py-2">60 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">310.00</td>
                         <td class="border border-gray-300 px-4 py-2">310.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">17.50</td>
                          
                    </tr>

                                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">106</td>
                        <td class="border border-gray-300 px-4 py-2"> pencil with erazer </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 1 doz</td>
                        <td class="border border-gray-300 px-4 py-2">12 can</td>
                        <td class="border border-gray-300 px-4 py-2">120.00</td>
                         <td class="border border-gray-300 px-4 py-2">1440.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">7</td>
                          
                    </tr>

                                       <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">107</td>
                        <td class="border border-gray-300 px-4 py-2"> whiteboard </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">80.00</td>
                         <td class="border border-gray-300 px-4 py-2">480.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">54</td>
                          
                    </tr>

                                  <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">108</td>
                        <td class="border border-gray-300 px-4 py-2"> correction pen 4ml </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 5 doz</td>
                        <td class="border border-gray-300 px-4 py-2">60 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">60.00</td>
                         <td class="border border-gray-300 px-4 py-2">300.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">3</td>
                          
                    </tr>

                    
                                  <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">109</td>
                        <td class="border border-gray-300 px-4 py-2"> rolling eyes </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 3 doz</td>
                        <td class="border border-gray-300 px-4 py-2">36 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">90.00</td>
                         <td class="border border-gray-300 px-4 py-2">270.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">3</td>
                          
                    </tr>

                                <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">110</td>
                        <td class="border border-gray-300 px-4 py-2"> rolling eyes big </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 doz</td>
                        <td class="border border-gray-300 px-4 py-2">72 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">116.00</td>
                         <td class="border border-gray-300 px-4 py-2">696.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">7</td>
                          
                    </tr>
                                 <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">111</td>
                        <td class="border border-gray-300 px-4 py-2"> crape paper </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 10 pack</td>
                        <td class="border border-gray-300 px-4 py-2">80 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">130.00</td>
                         <td class="border border-gray-300 px-4 py-2">1300.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">9</td>
                          
                    </tr>
                             <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">112</td>
                        <td class="border border-gray-300 px-4 py-2"> color paper </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 10 pack</td>
                        <td class="border border-gray-300 px-4 py-2">80 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">64.00</td>
                         <td class="border border-gray-300 px-4 py-2">640.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">4</td>
                          
                    </tr>

                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">113</td>
                        <td class="border border-gray-300 px-4 py-2"> rope </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 pack</td>
                        <td class="border border-gray-300 px-4 py-2">6 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">180.00</td>
                         <td class="border border-gray-300 px-4 py-2">1080.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">20</td>
                          
                    </tr>
                     <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">114</td>
                        <td class="border border-gray-300 px-4 py-2"> cutter </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 10 pack</td>
                        <td class="border border-gray-300 px-4 py-2">10 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">64.00</td>
                         <td class="border border-gray-300 px-4 py-2">640.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">4</td>
                          
                    </tr>

                      <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">115</td>
                        <td class="border border-gray-300 px-4 py-2"> cutter big</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 10 pack</td>
                        <td class="border border-gray-300 px-4 py-2">10 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">87.00</td>
                         <td class="border border-gray-300 px-4 py-2">870.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">6</td>
                          
                    </tr>

    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">116</td>
                        <td class="border border-gray-300 px-4 py-2"> crape paper</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 10 doz</td>
                        <td class="border border-gray-300 px-4 py-2">100 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">50.00</td>
                         <td class="border border-gray-300 px-4 py-2">500.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">4</td>
                          
                    </tr>

                               <td class="border border-gray-300 px-4 py-2">117</td>
                        <td class="border border-gray-300 px-4 py-2"> white board</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 10 doz</td>
                        <td class="border border-gray-300 px-4 py-2">60 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">60.00</td>
                         <td class="border border-gray-300 px-4 py-2">360.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">40</td>
                          
                    </tr>

                                      <td class="border border-gray-300 px-4 py-2">118</td>
                        <td class="border border-gray-300 px-4 py-2"> pencil sharpner 72 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 can</td>
                        <td class="border border-gray-300 px-4 py-2"> 360 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">180.00</td>
                         <td class="border border-gray-300 px-4 py-2">900.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">24</td>
                          
                    </tr>

                    
                                      <td class="border border-gray-300 px-4 py-2">119</td>
                        <td class="border border-gray-300 px-4 py-2"> pencil sharpner 72 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 6 can</td>
                        <td class="border border-gray-300 px-4 py-2"> 432 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">205.00</td>
                         <td class="border border-gray-300 px-4 py-2">1230.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">28</td>
                          
                    </tr>

                                 <td class="border border-gray-300 px-4 py-2">120</td>
                        <td class="border border-gray-300 px-4 py-2"> pencil sharpner 42 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 3 can</td>
                        <td class="border border-gray-300 px-4 py-2"> 126 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">345.00</td>
                         <td class="border border-gray-300 px-4 py-2">1035.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">77</td>
                          
                    </tr>

                      <td class="border border-gray-300 px-4 py-2">121</td>
                        <td class="border border-gray-300 px-4 py-2"> pencil sharpner 112 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 3 box</td>
                        <td class="border border-gray-300 px-4 py-2"> 112 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">340.00</td>
                         <td class="border border-gray-300 px-4 py-2">1020.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">76</td>
                          
                    </tr>

                        <td class="border border-gray-300 px-4 py-2">122</td>
                        <td class="border border-gray-300 px-4 py-2"> tape roll</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2"> 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">150.00</td>
                         <td class="border border-gray-300 px-4 py-2">1800.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">101</td>
                          
                    </tr>

  <td class="border border-gray-300 px-4 py-2">123</td>
                        <td class="border border-gray-300 px-4 py-2"> punch file</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 50 pcs</td>
                        <td class="border border-gray-300 px-4 py-2"> 4 box</td>
                        <td class="border border-gray-300 px-4 py-2">310.00</td>
                         <td class="border border-gray-300 px-4 py-2">1240.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">4</td>
                          
                    </tr>

                     <td class="border border-gray-300 px-4 py-2">124</td>
                        <td class="border border-gray-300 px-4 py-2"> marker two headed</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 72 pcs</td>
                        <td class="border border-gray-300 px-4 py-2"> 6 set</td>
                        <td class="border border-gray-300 px-4 py-2">145.00</td>
                         <td class="border border-gray-300 px-4 py-2">870.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">16</td>
                          
                    </tr>

<td class="border border-gray-300 px-4 py-2">125</td>
                        <td class="border border-gray-300 px-4 py-2"> majic marker</td>
                        <td class="border border-gray-300 px-4 py-2">1 x 72 pcs</td>
                        <td class="border border-gray-300 px-4 py-2"> 6 set</td>
                        <td class="border border-gray-300 px-4 py-2">290.00</td>
                         <td class="border border-gray-300 px-4 py-2">1740.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">16</td>
                          
                    </tr>

<td class="border border-gray-300 px-4 py-2">126</td>
                        <td class="border border-gray-300 px-4 py-2"> transparent file </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 18 pack</td>
                        <td class="border border-gray-300 px-4 py-2"> 1 box</td>
                        <td class="border border-gray-300 px-4 py-2">28.00</td>
                         <td class="border border-gray-300 px-4 py-2">504.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">2</td>
                          
                    </tr>

                    <td class="border border-gray-300 px-4 py-2">127</td>
                        <td class="border border-gray-300 px-4 py-2"> marker </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 4 doz</td>
                        <td class="border border-gray-300 px-4 py-2"> 48 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">98.00</td>
                         <td class="border border-gray-300 px-4 py-2">392.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">6</td>
                          
                    </tr>


                     <td class="border border-gray-300 px-4 py-2">128</td>
                        <td class="border border-gray-300 px-4 py-2"> ruler pencom </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 1 doz</td>
                        <td class="border border-gray-300 px-4 py-2"> 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">39.00</td>
                         <td class="border border-gray-300 px-4 py-2">39.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">62</td>
                          
                    </tr>

                          <td class="border border-gray-300 px-4 py-2">129</td>
                        <td class="border border-gray-300 px-4 py-2"> ruler folding game </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 1 doz</td>
                        <td class="border border-gray-300 px-4 py-2"> 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">70.00</td>
                         <td class="border border-gray-300 px-4 py-2">70.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">4</td>
                          
                    </tr>

                    
                          <td class="border border-gray-300 px-4 py-2">130</td>
                        <td class="border border-gray-300 px-4 py-2"> ruler folding line </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 1 doz</td>
                        <td class="border border-gray-300 px-4 py-2"> 12 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">50.00</td>
                         <td class="border border-gray-300 px-4 py-2">100.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">3</td>
                          
                    </tr>

                       
                          <td class="border border-gray-300 px-4 py-2">131</td>
                        <td class="border border-gray-300 px-4 py-2"> ruler thick line </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 2 doz</td>
                        <td class="border border-gray-300 px-4 py-2"> 24 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">24.00</td>
                         <td class="border border-gray-300 px-4 py-2">576.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">2</td>
                          
                    </tr>

                          <td class="border border-gray-300 px-4 py-2">132</td>
                        <td class="border border-gray-300 px-4 py-2"> ruler steel feet </td>
                        <td class="border border-gray-300 px-4 py-2">1 x 3 doz</td>
                        <td class="border border-gray-300 px-4 py-2"> 36 pcs</td>
                        <td class="border border-gray-300 px-4 py-2">128.00</td>
                         <td class="border border-gray-300 px-4 py-2">384.00</td>
                          <td class="border border-gray-300 px-4 py-2">PURCHASED</td>
                          <td class="border border-gray-300 px-4 py-2">8</td>
                          
                    </tr>






























































                

                   

                </tbody>
            </table>
                 
                </div>
                <div>
                    
                </div>
                <div class="bg-warning">
                
                </div>
                
                <div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
