<form id="request-form" name="request-form" action="#" onsubmit="return false" class="ajax">
	<input type="hidden" class="af_query" value="submit_request" />
	<input type="hidden" class="af_page" value="request" />
	<input type="hidden" class="af_loading" value="0" />
	<input type="hidden" class="af_clear" value="0" />
    <div class="line">
        <div class="label">
            <label for="first_name">First Name</label>
        </div>
        <div class="input">
            <input type="text" class="text" id="first_name" name="first_name" />
        </div>
    </div>
    <div class="line">
        <div class="label">
            <label for="last_name">Last Name</label>
        </div>
        <div class="input">
            <input type="text" class="text" id="last_name" name="last_name" />
        </div>
    </div>
    <div class="line">
        <div class="label">
            <label for="email_address">Email Address</label>
        </div>
        <div class="input">
            <input type="text" class="text" id="email_address" name="email_address" />
        </div>
    </div>
    <div class="line">
        <div class="label">
            <label for="comments">Comments</label>
        </div>
        <div class="textarea">
            <textarea id="comments" name="comments" rows="4" cols="10"></textarea>
        </div>
    </div>
</form>