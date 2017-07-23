<?php
/**
 * WP-MaxCDN-Reseller-API (https://reseller-docs.maxcdn.com/)
 *
 * @package WP-MaxCDN-Reseller-API
 */
/*
* Plugin Name: WP MaxCDN Reseller API
* Plugin URI: https://github.com/wp-api-libraries/wp-maxcdn-api
* Description: Perform API requests to MaxCDN in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-maxcdn-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
\
/* Check if class exists. */
if ( ! class_exists( 'MaxCdnResellerAPI' ) ) {
	
	/**
	 * MaxCdnResellerAPI API Class.
	 */
	class MaxCdnResellerAPI {
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://rws.maxcdn.com';
		
		/**
		 * __construct function.
		 *
		 * @access public
		 * @return void
		 */
		public function __construct() {
			
		}
		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {
			$response = wp_remote_get( $request );
			$code = wp_remote_retrieve_response_code( $response );
			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'wp-maxcdn-reseller-api' ), $code ) );
			}
			$body = wp_remote_retrieve_body( $response );
			return json_decode( $body );
		}
		
		/* ACCOUNTS. */
		
		/**
		 * get_account function.
		 * 
		 * @access public
		 * @param mixed $company_alias
		 * @return void
		 */
		public function get_account( $company_alias ) {
			
			$request = $this->base_uri . '/'.$company_alias.'/account.json';
			return $this->fetch( $request );
		}
		
		public function update_account( $company_alias ) {
			
		}
		
		/* USERS. */
		
		/* ZONES. */
		
		/* REPORTS. */
		
		/* RAW LOGS. */
		
		public function get_raw_logs() {
			
		}
		
		/* ORIGIN SHIELD. */
		
		public function enable_origin_shield() {
			
		}
		
		public function update_origin_shield() {
			
		}
		
		public function delete_origin_shield() {
			
		}
		
		/* SSL. */
		
		public function list_certificates() {
			
		}
		
		public function create_certificate() {
			
		}
		
		public function get_certificate() {
			
		}
		
		public function update_certificate() {
			
		}
		
		public function delete_certificate() {
			
		}
		
		/* CLIENTS. */
		
		public function list_clients() {
			
		}
		
		public function create_clients() {
			
		}
		
		public function get_client_bandwidth() {
			
		}
		
		public function get_storage_data() {
			
		}
		
		public function get_storage_used() {
			
		}
	}
}