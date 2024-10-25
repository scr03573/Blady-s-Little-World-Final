import re
import subprocess

# Path to the log file containing the IP addresses
log_file_path = '/Users/camroy/blady-web-app/bladys-little-world/formatted_access_with_time.log'

# Path to save the output with WHOIS results
output_file_path = '/Users/camroy/blady-web-app/bladys-little-world/extracted_whois.txt'

# Function to perform nslookup on an IP address
def get_whois_info(ip):
    try:
        # Run the whois command on the IP
        result = subprocess.run(['whois', ip], stdout=subprocess.PIPE, stderr=subprocess.PIPE, text=True)
        if result.returncode == 0:
            return result.stdout
        else:
            return f"Error looking up {ip}: {result.stderr}"
    except Exception as e:
        return f"Failed to lookup {ip}: {str(e)}"

# Regular expression to extract IPs from the log file
ip_regex = re.compile(r'\b(?:\d{1,3}\.){3}\d{1,3}\b')

# Read the log file and extract IPs
with open(log_file_path, 'r') as log_file:
    log_data = log_file.read()

# Extract all unique IP addresses
ips = set(re.findall(ip_regex, log_data))

# Open the output file for writing
with open(output_file_path, 'w') as output_file:
    for ip in ips:
        # Perform the whois lookup and write the results
        output_file.write(f"WHOIS for IP: {ip}\n")
        whois_info = get_whois_info(ip)
        output_file.write(whois_info + "\n")
        output_file.write("-" * 60 + "\n")  # Separator between results

print(f"WHOIS lookup results saved to {output_file_path}")