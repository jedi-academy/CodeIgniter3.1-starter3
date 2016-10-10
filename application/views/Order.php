<!-- Description of supplies

@author Peyman
 -->
<div class="row">
    <div class="span12 offset1">
        <h2>Supplies</h2>
        <div class="well">
            <div class="row">
                <div class="col-md-2">{code}</div>
                <div class="col-md-2">volume: {stockingUnit}</div>
                <div class="col-md-2">costs: {receivingCost}</div>
                <div class="col-md-2">Instock {quantity}</div>
                <div class="col-md-2">receiving Unit {receivingUnit}</div>
            </div>
            <div class="row">
                <div class="col-md-12">{description}</div>
            </div>
            <div class="form-group">
                <label for="usr">How many {code} would you like to order?:</label>
                <input type="number" class="form-control" id="orderNumber">
            </div>
        </div>
    </div>
</div>