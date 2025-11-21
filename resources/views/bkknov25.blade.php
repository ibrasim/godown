@extends('layouts.appuae')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    <h5>(ORDER LIST -FINAL 21 NOV 25 | THB 92,164.00  | US$3,586.00  | MVR 75,306.68)</h5>
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
