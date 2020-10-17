
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f6c4d5f89fb4a374f76b581"/>


<form class="jotform-form" action="" method="POST" name="form_202773780860057" id="202773780860057" accept-charset="utf-8" autocomplete="on">
  @csrf
  <input type="hidden" name="formID" value="202773780860057" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Add Project
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"> Project Title </label>
        <div id="cid_6" class="form-input-wide" data-layout="half">
          <input type="text" id="input_6" name="name" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_6" />
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Lang/Platform </label>
        <div id="cid_5" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_5" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_0" name="platform" value="PHP" />
              <label id="label_input_5_0" for="input_5_0"> PHP </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_1" name="platform" value="Laravel" />
              <label id="label_input_5_1" for="input_5_1"> Laravel </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_2" name="platform" value="Java" />
              <label id="label_input_5_2" for="input_5_2"> Java </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_5_3" name="platform" value="React" />
              <label id="label_input_5_3" for="input_5_3"> React </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Description </label>
        <div id="cid_7" class="form-input-wide" data-layout="full">
          <textarea id="input_7" class="form-textarea" name="description" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_7"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> Github </label>
        <div id="cid_4" class="form-input-wide" data-layout="half">
          <input type="text" id="input_4" name="link" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_4" />
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_9">
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_9" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
</form>