@extends('layouts.master')
@section('title','員工資料')
@section('content')

  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">員工資料</div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">
            <thead class="thead-darty">
              <tr>
                <th>員工編號</th>
                <th>員工姓名</th>
                <th>員工地址</th>
                <th>員工電話</th>
                <th>員工時薪</th>
              </tr>
            </thead>
            <tbody>
              
              <?php
              foreach ($employees as $user){
              ?>
              <tr><!--顯示員工編號,員工姓名,員工地址,電話-->
                <td><?php echo $user->id; ?>
                <td><?php echo $user->Name ; ?></td>
                <td><?php echo $user->Address ; ?></td>
                <td><?php echo $user->Phone ; ?></td>
                <td><?php echo $user->Hourlypay ; ?></td>
                <!--編輯按鈕-->
                <td><a href="{{ action('EmployeeController@edit', 
                                ['id'=>$user->id,
                                'Name'=>$user->Name,
                                'Address'=>$user->Address,
                                'Phone'=>$user->Phone,
                                'Hourlypay'=>$user->Hourlypay ]) }}" 
                                class="btn btn-success btn-sm">編輯</a>
                    <?php
                    #取得Date資料表內容  
                    $dates = App\Date::where('employee_id','=',$user->id)->get();
                    foreach($dates as $date){
                      //echo $date;
                    }
                    #取得Hours資料表內容  
                    $hours = App\Hours::where('date_id','=',$date->employee_id)->get();
                    foreach($hours as $hour){
                      //echo $hour;
                      ?>
                      <!--刪除按鈕  以下刪除包含員工資料,以及員工工作日期,以及工作時數-->
                    <a href="{{action('EmployeeController@delete', 
                              ['id'=>$user->id,
                              'Name'=>$user->Name,
                              'Address'=>$user->Address,
                              'Phone'=>$user->Phone,
                              'Hourlypay'=>$user->Hourlypay, 
                              'employee_id'=>$date->employee_id,
                              'date_id'=>$hour->date_id])  
                              }}"
                              class="btn btn-danger btn-sm">刪除</a></td>
                    <?php }  ?>             
              <?php }  ?>
              </tr>
            </tbody>
          </table>
        </div>  
      </div>
    </div>
  </div>
  @stop
