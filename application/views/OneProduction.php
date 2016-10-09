 <div class="row">
    <div class="span8 offset1">
        <h2>Production</h2>
        <div class ="row">
            <div class="prodContainer"><h1><a href="/Production/show/{code}"><b>{code}</b></a>: {description} <br> <div> <p> Ingredients:  {ingredients}    
                {name},
                {/ingredients}</p> </div></h1></div>
        </div>
        <div class="row">
            {recipes}
            <div class="prodContainer"><a href="/Production/show/{code}"><b>{code}</b></a>: {description} <br></br> </div>
            {/recipes}
        </div>
    </div>
</div>