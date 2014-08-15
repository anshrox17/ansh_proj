<h1>Blog Salesorder</h1>
<?php //echo json_encode($salesorders);die(); 
?>
<?php

foreach($salesorders as $key=>$salesorder)
{
	$salesorder["s"]["value"] = intval($salesorder["s"]["number of products"])*intval($salesorder["p"]["Value"]);
	$salesorder["s"]["tax_amount"] = intval($salesorder["s"]["tax_percent"])*intval($salesorder["s"]["value"])/100;
	$salesorder["s"]["order_id"]   = intval($salesorder["s"]["order_id"]);
	$salesorder["s"]["customer_id"]   = intval($salesorder["s"]["customer_id"]);
	$salesorder["s"]["value"]   = intval($salesorder["s"]["value"]);
	$salesorders[$key]=$salesorder;
	
	
}

?>
<html ng-app="sales">
<head>
	<script src = "http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
		var salesapp = angular.module('sales',[]);
		salesapp.controller('salesctrl',function($scope,$http){
			
			$scope.sortfield = '-s.order_id';
			$scope.salesorders = <?php echo json_encode($salesorders); ?> ;
			console.log($scope.salesorders);
			
			$scope.update=function(obj){
				console.log('anshum', $('#obj'));
				$('.amount#_'+obj).text((parseFloat($('.value#_'+obj).text())*parseFloat($('.tax#_'+obj).text()))/100) ;
				
				var url = "http://localhost/cakephp/sample/salesorder/ajax";
				var amt =$('.tax#_'+obj).text();
				var date = $('.date#_'+obj).text();
				
				console.log('ansh', date);
				//$http.post(url ,JSON.stringify({'amt' : amt , 'date':date})).success(function(e){console.log('yayyyy' , e);});
				
				$.ajax({
					url : url,
					type: 'POST',
					data: {
						'amt' : amt,
						'date' : date
					},
					success : function(e){
						console.log(e);
					}
					
				}); 
			};
		});
	</script>
</head>
<body ng-controller="salesctrl">
<!-- Search:<input ng-model="query"  type="search" placeholder="filter orders..."/> -->
<table>
    <tr>
       <th><a href="" ng-click="sortfield = 's.order_id';reverse=!reverse">Order Id</a></th>
        <th >Customer Id</th>
		<th><a href="" ng-click="sortfield = 'c.customer_name';reverse=!reverse">Customer name</a></th>
        <th><a href="" ng-click="sortfield = 's.date';reverse=!reverse">Date</a></th>
		<th><a href="" ng-click="sortfield = 's.value';reverse=!reverse">Value</a></th>
		<th>tax%</th>
		<th>Tax amount</th>
    </tr>
	
	<tr ng-repeat="salesorder in salesorders | orderBy:sortfield:reverse | filter:query ">
	
		<td>{{salesorder.s.order_id}}</td>
		<td>{{salesorder.s.customer_id}}</td>
		<td>{{salesorder.c.customer_name}}</td>
		<td class="date" id="_{{$index}}">{{salesorder.s.date}}</td>
		<td class="value" id="_{{$index}}">{{salesorder.s.value}}</td>
		<td class="tax"  id="_{{$index}}" contenteditable="true" ng-blur="update($index)">{{salesorder.s.tax_percent}}</td>
		<td class="amount"  id="_{{$index}}">{{salesorder.s.tax_amount}}</td>
	</tr> 

	
    <?php unset($salesorder); ?>
</table>
</body>
</html>