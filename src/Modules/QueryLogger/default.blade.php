<h1>Queries</h1>
@if (isset($queries) && count($queries))
<table class="anbu-table">
    <thead>
        <tr>
            <th>Query</th>
            <th>Execution Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach($queries as $query)
        <tr>
            <td class="code">{{ $query[0] }} | {{ json_encode($query[1]) }}</td>
            <td>{{ number_format($query[2], 5) }}ms</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="empty">No queries have been executed during this request.</div>
@endif
