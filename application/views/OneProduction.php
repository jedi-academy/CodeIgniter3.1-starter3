 <div class="row">
    <div class="span8 offset1">
        <h2>Production</h2>
        <div class ="row">
            <div class="prodContainer"><h2><b>{code}</b>: {description} <br> <div> <p> Ingredients:  
                <table border = '1'>
                    <tr>
                        <th>Name</th>
                        <th>Available</th>
                    </tr>
                {ingredients}    
                <tr>
                    <td>
                        {name}
                    </td>
                    <td>
                        {available}
                    </td>
                </tr>
                {/ingredients}
                <table>
                </p> </div></h2></div>
        </div>
        <div class="row">
            {recipes}
            <div class="prodContainer"><a href="/Production/show/{code}"><b>{code}</b></a>: {description} <br></br> </div>
            {/recipes}
        </div>
    </div>
</div>