<!--</div>-->


<!-- Control Sidebar -->

<!-- Main Footer -->
<!-- <footer class="main-footer">-->
	<!-- To the right -->
	<!-- Default to the left -->
				<!--<strong>Copyright &copy; 2021 <a href="https://Reinventa.cl">Reinventa</a>.</strong> All rights reserved.
				</footer>-->
				<div class="bottom">
					<footer class="text-center text-lg-start main-footer-Reinventa">
						<div class="container">
							<div class="row">
								<div class="col-md-12 text-bold mb-2"> Información Relevante</div>
							</div>
							<div class="row mb-2">
								<div class="col-md-6 font-weight-light font-weight-bolder"> <a href="#" target="_blank" data-toggle="modal" data-target="#staticBackdrop">Preguntas Frecuentes</a></div>
								<div class="col-md-6 font-weight-light font-weight-bolder"> <a href="#" target="_blank" data-toggle="modal" data-target="#uso_plataforma">¿Cómo usar la plataforma?</a></div>
								<!--<div class="col-md-3 font-weight-light font-weight-bolder"> <a href="#" target="_blank" data-toggle="modal" data-target="#staticBackdrop2">Video Demostración</a></div>-->
							</div>
						</div>
						<!-- Copyright -->
						<div class="text-center p-1">
							<strong>Copyright &copy; 2021 <a href="https://Reinventa.cl">Reinventa</a>.</strong> All rights reserved.
						</div>
						<!-- Copyright -->
						<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-lg">
								<div class="modal-content">
									<div class="modal-header bg-dark text-white">
										<h5 class="modal-title" id="staticBackdropLabel">Preguntas Frecuentes</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="card-body">
											<div class="row">
												<?php
										//var_dump($opciones);

												foreach ($obj->data as $i => $value)
												{
													?>
													<div class="col-sm-12 mb-2 d-flex p-2 bd-highlight">
														<?php
														if ($value->content!="")
														{
															?>
															<button type="button" class="btn btn-lg btn-block btn-outline-secondary w-100 p-3" aria-pressed="true" role="button" data-toggle="modal" data-target="#exampleModal<?php echo $value->id; ?>">
																<?php echo $value->title; ?>
															</button>
															<?php
														}
														else
														{
															?>
															<button type="button" class="btn btn-block btn-block btn-outline-secondary btn-lg disabled" aria-pressed="true" role="button" data-toggle="modal" data-target="#exampleModal<?php echo $i; ?>"><?php echo $value->title; ?>
														</button>
														<?php
													}
													?>
												</div>
												<?php
											}
											?>
										</div>
									</div><!-- Scrollable modal -->
								</div>
								<div class="modal-footer bg-light text-dark">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="documentacion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-lg">
								<div class="modal-content">
									<div class="modal-header bg-dark text-white">
										<h5 class="modal-title" id="staticBackdropLabel">Preguntas Frecuentes</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="card-body">
											<div class="row">
												<div class="col-sm-12 mb-2 d-flex p-2 bd-highlight">
													<button type="button" class="btn btn-lg btn-block btn-outline-secondary w-100 p-3" aria-pressed="true" role="button" data-toggle="modal" data-target="#Manual_de_Prevención_de_Delitos">Manual de Prevención de Delitos de usuario</button>
												</div>
												<div class="col-sm-12 mb-2 d-flex p-2 bd-highlight">
													<button type="button" class="btn btn-lg btn-block btn-outline-secondary w-100 p-3" aria-pressed="true" role="button" data-toggle="modal" data-target="#Política_de_Integridad">Política de Integridad</button>	
												</div>
												<div class="col-sm-12 mb-2 d-flex p-2 bd-highlight">
													<button type="button" class="btn btn-lg btn-block btn-outline-secondary w-100 p-3" aria-pressed="true" role="button" data-toggle="modal" data-target="#sistema_de_integridad">Sistema de integridad</button>	
												</div>		
											</div>
										</div><!-- Scrollable modal -->
									</div>
								<div class="modal-footer bg-light text-dark">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="Política_de_Integridad" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header bg-dark text-white">
									<h5 class="modal-title" id="staticBackdropLabel">Política de Integridad</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
										<div class="container-fluid">
											<div class="row">
												<embed src="Política_de_Integridad.pdf" frameborder="0" width="100%" height="700px">
											</div>
										</div><!-- Scrollable modal -->
									</div>
									<div class="modal-footer bg-light text-dark">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="sistema_de_integridad" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable modal-xl">
							<div class="modal-content">
								<div class="modal-header bg-dark text-white">
									<h5 class="modal-title" id="staticBackdropLabel">Sistema de integridad</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
										<div class="container-fluid">
											<div class="row">
												<img src="sistema_de_integridad.jpg" class="img-fluid" alt="sistema_de_integridad">
												<!--<img src="sistema_de_integridad.jpg">-->
											</div>
										</div><!-- Scrollable modal -->
									</div>
									<div class="modal-footer bg-light text-dark">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="Manual_de_Prevención_de_Delitos" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header bg-dark text-white">
									<h5 class="modal-title" id="staticBackdropLabel">Manual de Prevención de Delitos</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
										<div class="container-fluid">
											<div class="row">
												<embed src="Manual_de_Prevención_de_Delitos.pdf" frameborder="0" width="100%" height="700px">
											</div>
										</div><!-- Scrollable modal -->
									</div>
									<div class="modal-footer bg-light text-dark">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>
					<div class="modal fade" id="uso_plataforma" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-lg">
								<div class="modal-content">
									<div class="modal-header bg-dark text-white">
										<h5 class="modal-title" id="staticBackdropLabel">¿Cómo usar la plataforma?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="card-body">
											<div class="row">
												<?php
												foreach ($obj2->data as $i => $value)
												{
													?>
													<div class="col-sm-12 mb-2 d-flex p-2 bd-highlight">
														<?php
														if ($value->content!="" || $value->title!="Manual de usuario")
														{
															?>
															<button type="button" class="btn btn-lg btn-block btn-outline-secondary w-100 p-3" aria-pressed="true" role="button" data-toggle="modal" data-target="#<?php echo "video".$value->id; ?>">
																<?php echo $value->title; ?>
															</button>
															<?php
														}
													?>
												</div>
												<?php
											}
											?>
										</div>
									</div><!-- Scrollable modal -->
								</div>
								<div class="modal-footer bg-light text-dark">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
					<?php
					foreach ($obj2->data as $i => $value)
					{
						?>
					<div class="modal fade" id="<?php echo "video".$value->id; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header bg-dark text-white">
									<h5 class="modal-title" id="staticBackdropLabel"><?php echo $value->title; ?></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row d-flex justify-content-center">
												<?php
												if ($value->content!="")
												{
													?>
													<?php echo $value->content; ?>
													<?php
												}
												else
												{
													?>
													...
													<?php
												}
												?>
										</div>
									</div><!-- Scrollable modal -->
								</div>
								<div class="modal-footer bg-light text-dark">
									<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="onYouTubePlayerAPIReady();">Cerrar</button>
								</div>
							</div>
						</div>
					</div>
						<?php
					}
					?>

					<?php
					foreach ($obj->data as $i => $value)
					{
						?>
						<div class="modal fade " id="exampleModal<?php echo $value->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header bg-dark text-white">
										<h5 class="modal-title" id="exampleModalLabel"><?php echo $value->title; ?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<?php echo $value->content; ?>
									</div>
									<div class="modal-footer bg-light text-dark">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>
						<?php
										//}
					}
					?>
					<div class="modal fade" id="manual_de_uso" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header bg-dark text-white">
									<h5 class="modal-title" id="staticBackdropLabel">Información adicional</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
										<div class="container-fluid">
											<div class="row">
												<embed src="ManualdeusuarioMBarnechea.pdf" frameborder="0" width="100%" height="700px">
											</div>
										</div><!-- Scrollable modal -->
									</div>
									<div class="modal-footer bg-light text-dark">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
									</div>
								</div>
							</div>
						</div>
					</footer>

				</div>

   <!-- jQuery 
   <script src="<?=base_url;?>assets/plugins/jquery/jquery.min.js"></script>
-->
<script>
            var player;
            function onYouTubePlayerAPIReady() {player = new YT.Player('player');player.stopVideo();}
            //so on jquery event or whatever call the play or stop on the video.
            //to play player.playVideo();
            //to stop player.stopVideo();
     </script>
<!-- Bootstrap 4 -->
<script src="<?=base_url;?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url;?>assets/dist/js/adminlte.min.js"></script>
<script src="<?=base_url;?>libs/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url;?>libs/locales/bootstrap-datepicker.es.min.js"></script>
</body>
</html>