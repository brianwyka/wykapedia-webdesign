<div class="panel last-panel">
	<div class="float-right" id="wp-logo-large">
		<img src="pub/images/wykaPedia.png" alt="wykaPedia" title="wykaPedia" />
	</div>
	<h2>Submit a Request</h2>
	<div class="sub-panel" id="request-form-panel">
		<form id="request-form" name="request-form" class="ajax">
			<input type="hidden" class="af_page" value="request" />
			<input type="hidden" class="af_query" value="submit_request" />
			<input type="hidden" class="af_loading" value="0" />
			<input type="hidden" class="af_clear" value="1" />
			<div class="line">
				<div class="label">
					<label for="first_name">First Name*</label>
				</div>
				<div class="input">
					<input type="text" id="first_name" name="first_name" />
				</div>
			</div>
			<div class="line">
				<div class="label">
					<label for="last_name">Last Name*</label>
				</div>
				<div class="input">
					<input type="text" id="last_name" name="last_name" />
				</div>
			</div>
			<div class="line">
				<div class="label">
					<label for="phone_number">Phone Number</label>
				</div>
				<div class="input">
					<input type="text" class="ignore" id="phone_number" name="phone_number" />
				</div>
			</div>
			<div class="line">
				<div class="label">
					<label for="email_address">Email Address*</label>
				</div>
				<div class="input">
					<input type="text" id="email_address" name="email_address" />
				</div>
			</div>
			<div class="line">
				<div class="label">
					<label for="comments">Comments*</label>
				</div>
				<div class="textarea">
					<textarea id="comments" name="comments" rows="4" cols="10"></textarea>
				</div>
			</div>
			<div class="button">
				<input type="reset" value="Reset Form" />
				<input type="button" value="Submit" onclick="AjaxForm.submit(this.form.id)" />
			</div>
		</form>
	</div>
</div>