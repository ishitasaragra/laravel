﻿
@extends('admin.layout.structure')


@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Element Examples
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Basic Form Examples</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Text Input</label>
                                            <input class="form-control" />
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <input class="form-control" placeholder="PLease Enter Keyword" />
                                        </div>
                                        <div class="form-group">
                                            <label>Just A Label Control</label>
                                            <p class="form-control-static">info@yourdomain.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" />
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Checkbox Example One
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Checkbox Example Two
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value=""/>Checkbox Example Three
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Checkboxes Examples</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> One
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> Two
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox"/> Three
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Button Examples</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />Radio Example One
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Radio Example Two
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"/>Radio Example Three
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Select Example</label>
                                            <select class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Multiple Select Example</label>
                                            <select multiple class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>

                                    </form>
                                    <br />
                                      <h3>With radio & checkboxes</h3>
                                    <form>

    <div class="form-group input-group">
      <span class="input-group-addon">
        <input type="checkbox" />
      </span>
      <input type="text" class="form-control" />
    </div>
                                         <div class="form-group input-group">
      <span class="input-group-addon">
        <input type="radio" />
      </span>
      <input type="text" class="form-control" />
    </div>
                                    </form>

        </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    @endsection