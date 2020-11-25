<form action="/stores" method="post">
    @csrf
    <p>&nbsp;&nbsp;Ism-familiyangiz<span style="color: red;">*</span>
        <br />
        <span class="cf-form-control-wrap your-name">
            <input type="text" name="name" value="" size="107" class="cf-form-control cf-text " />
        </span></p>
    <p>&nbsp;&nbsp;Emailingiz<span style="color: red">*</span>
        <br />
        <span class="cf-form-control-wrap your-email">
            <input type="email" name="email" value="" size="107" class="cf-form-control cf-text cf-email" />
        </span> </p>
    <p>&nbsp;&nbsp;Xabar
        <br />
        <span class="cf-form-control-wrap your-message">
            <textarea name="message" cols="107" rows="8" class="cf-form-control cf-textarea"></textarea>
        </span> </p>
    <p>
        <input type="submit" value="Jo'natish" class="cf-form-control cf-submit" />
    </p>
</form>
