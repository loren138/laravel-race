<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}
			
			table { color: #111; }
			
			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$("th.inc").each(function () { // fire 26 requests to increment
					$.ajax({
						url: "./inc/"+$(this).text(),
					}).done(rowDone);
				});
			});
			function rowDone( data ) {
				var row = $("<tr>");
				row.append($("<td>").text(data['inc']));
				row.append($("<td>").text(data['vals'][data['inc']]));
				row.append($("<td>").text(data['vals']['a']));
				row.append($("<td>").text(data['vals']['b']));
				row.append($("<td>").text(data['vals']['c']));
				row.append($("<td>").text(data['vals']['d']));
				row.append($("<td>").text(data['vals']['e']));
				row.append($("<td>").text(data['vals']['f']));
				row.append($("<td>").text(data['vals']['g']));
				row.append($("<td>").text(data['vals']['h']));
				row.append($("<td>").text(data['vals']['i']));
				row.append($("<td>").text(data['vals']['j']));
				row.append($("<td>").text(data['vals']['k']));
				row.append($("<td>").text(data['vals']['l']));
				row.append($("<td>").text(data['vals']['m']));
				row.append($("<td>").text(data['vals']['n']));
				row.append($("<td>").text(data['vals']['o']));
				row.append($("<td>").text(data['vals']['p']));
				row.append($("<td>").text(data['vals']['q']));
				row.append($("<td>").text(data['vals']['r']));
				row.append($("<td>").text(data['vals']['s']));
				row.append($("<td>").text(data['vals']['t']));
				row.append($("<td>").text(data['vals']['u']));
				row.append($("<td>").text(data['vals']['v']));
				row.append($("<td>").text(data['vals']['w']));
				row.append($("<td>").text(data['vals']['x']));
				row.append($("<td>").text(data['vals']['y']));
				row.append($("<td>").text(data['vals']['z']));
				$("table tbody").append(row);
				console.log($("table tbody tr").length);
				if ($("table tbody tr").length == 27) {
					// Done, Get final results
					$.ajax({
						url: "./vals",
					}).done(rowDone);
				}
			}
		</script>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				<table><thead>
					<tr>
						<th>Which</th>
						<th>Self</td>
						@foreach ($vals as $k => $v)
							<th class="inc">{{$k}}</th>
						@endforeach
					</tr>
				</thead><tbody>
					<tr>
						<td>Init</td>
						<td>-</td>
						@foreach ($vals as $k => $v)
							<td>{{$v}}</td>
						@endforeach
					</tr>
				</tbody></table>
			</div>
		</div>
	</body>
</html>
