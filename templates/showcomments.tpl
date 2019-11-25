<div class="row">
    <div class="col-12">
        {include file="vue/comments.tpl"}
        <div class="row">
            <div class="col-12" class="mx-auto">
                <form class="form-group" class="comment" id="form-comments">
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Put the score</label>
                    <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <label for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label for="radio5">★</label>
                    </p>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Add comment of the product</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>