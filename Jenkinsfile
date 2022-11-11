pipeline {
	agent {
		docker {
			image 'composer:latest'
		}
	}
	stages {
		stage('OWASP DependencyCheck') {
			steps {
				dependencyCheck additionalArguments: '--format HTML --format XML', odcInstallation: 'Default'
			}
		}
		stage('Build') {
			steps {
				sh 'composer install'
			}
		}
		stage('Unit Test') {
			steps {
                sh './vendor/bin/phpunit test'
            }
		}
	}
	post {
		success {
			dependencyCheckPublisher pattern: 'dependency-check-report.xml'
		}
	}
}
