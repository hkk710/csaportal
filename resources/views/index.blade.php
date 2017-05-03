<!DOCTYPE html>
<div class="col-md-4" id="country" style="display: block;">
    <label for="country"> Nationality
    <select class="form-control" id="country_dropdown" name="country">
    <option value="none">select one</option>
    @foreach ($country-> as $country)
        <option value=""> </option>
    @endforeach
    </select>
    </label>
</div>


<div class="col-md-4" id="bloodgroup" style="display: block;">
    <label for="bloodgroup">
    <select class="form-control" id="country_dropdown" name="bloodgroup">
    <option value="none">select one</option>
    @foreach ($bloodgroup-> as $bloodgroup)
        <option value=""> </option>
    @endforeach
    </select>
    </label>
</div>
