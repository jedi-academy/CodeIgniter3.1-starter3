<style>
    .dash-table td, .dash-table th {
        padding-right: 20px;
        padding-top: 3px;
        text-align: left;
    }



    .dash-table th {
        border-bottom: 1px solid black
    }

</style>

<div id="body">
<h3>Dashboard</h3>
    <table class="dash-table">
    {base}
        <tr>
            <td>Base</td>
            <td>{name} ({code})</td>
        </tr>
    {/base}
    {dest}
        <tr>
            <td>Destination {key}</td>
            <td>{name} ({code})</td>
        </tr>
    {/dest}
        <tr>
            <td>Number of Planes</td>
            <td>{count}</td>
        </tr>
    </table>

</div>


