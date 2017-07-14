<div class="content-wrapper">    <!-- Content Header (Page header) show breads crumb-->    <section class="content-header">        <h1><?php echo $page_title; ?></h1>        <?php echo $breadcrumb; ?>    </section>    <section class="content ">           <div class="row">            <div class="box-body">                <div class="col-md-6">                    <div id="errorsDiv"></div>                    <?php if ( validation_errors() ): ?>                        <div class="alert alert-danger alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo validation_errors('<p>', '</p>'); ?>                        </div>                    <?php endif; ?>                    <?php if ( $this->session->flashdata('errors') ): ?>                        <div class="alert alert-danger alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo $this->session->flashdata('errors') ?>                        </div>                    <?php endif; ?>                    <?php if ( $this->session->flashdata('success') ): ?>                        <div class="alert alert-success alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo $this->session->flashdata('success'); ?>                        </div>                    <?php endif; ?>                    <?php if ( $this->session->flashdata('delete') ): ?>                        <div class="alert alert-danger alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo $this->session->flashdata('delete'); ?>                        </div>                    <?php endif; ?>                    <?php if ( $this->session->flashdata('update') ): ?>                        <div class="alert alert-warning alert-dismissible" role="alert">                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>                            <?php echo $this->session->flashdata('update'); ?>                        </div>                    <?php endif; ?>                </div>              </div>        </div>        <!--show the common messages to all-->        <div class="row">            <div class="panel panel-success">                <div class="panel-body box box-info">                    <div class="tab-content clearfix">                        <div class="clearfix"></div><br>                         <div class="row panel panel-success" style="padding-top:20px; overflow:scroll;backgroun:#f8f8f8;">                            <div class="container col-md-12">                                <table id="example1"  style="backgroun:#f7f7f7;overflow:scroll !important;" class="table table-striped table-bordered"   cellspacing="0" width="100%">                                    <thead>                                        <tr>                                            <th>Intervention Name </th>                                            <th>Intervention Date</th>                                            <th>Action</th>                                        </tr>                                    </thead>                                    <tbody>                                        <?php                                        if ( isset($data['all_data']) ) {                                            foreach ( $data['all_data'] as $value ) {                                                ?>                                                <tr>                                                    <td>                                                        <p><?= $value->intervention_name ?> </p>                                                    </td>                                                    <td>                                                        <p><?= $value->intervention_date ?> </p>                                                    </td>                                                    <td>                                                        <a  class="btn btn-default btn-xs" href="<?= base_url("interventions/delete/" . $value->intervention_id); ?>" onclick="return confirm('Want to delete ?')">                                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>                                                             Delete                                                        </a>                                                        <a  class="btn btn-default btn-xs" href="<?= base_url("interventions/edit/" . $value->intervention_id); ?>">                                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>                                                             Edit                                                        </a>                                                    </td>                                                </tr>	                                                <?php                                            }                                        }                                        ?>                                    </tbody>                                </table>                            </div>                        </div>                    </div>                </div>                </section>            </div>