import tinify
import os

# Set your API key
tinify.key = "F4Lb3jbxZ5gCRjzqjcy5hDMXrPzvpn1C"

# Define the folder containing the images
image_folder = "/Users/camroy/blady-web-app/bladys-little-world/assets"  # Update this to your actual image folder path
optimized_folder = os.path.join(image_folder, "optimized")

# Ensure the optimized folder exists
if not os.path.exists(optimized_folder):
    os.makedirs(optimized_folder)

# Iterate over all image files in the folder
for filename in os.listdir(image_folder):
    if filename.endswith((".png", ".jpg", ".jpeg")):
        source_path = os.path.join(image_folder, filename)
        dest_path = os.path.join(optimized_folder, filename)
        
        # Compress and save the image to the optimized folder
        try:
            source = tinify.from_file(source_path)
            source.to_file(dest_path)
            print(f"Optimized: {filename}")
        except tinify.errors.AccountError:
            print("Verify your API key and account limit.")
        except Exception as e:
            print(f"Error optimizing {filename}: {str(e)}")

print("Image optimization completed.")